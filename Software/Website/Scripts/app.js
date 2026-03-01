// This is a rough, initial draft. Tweak if necessary.

const form = document.getElementById("userForm");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const list = document.getElementById("userList");
const statusEl = document.getElementById("status");
const addButton = document.getElementById("addButton");

async function api(path, options) {
  const res = await fetch(path, {
    headers: { "Content-Type": "application/json" },
    ...options,
  });
  const data = await res.json().catch(() => ({}));
  if (!res.ok) throw new Error(data.error || `HTTP ${res.status}`);
  return data;
}

function setStatus(msg) {
  statusEl.textContent = msg || "";
}

async function loadUsers() {
  const { data } = await api("/api/users");
  list.innerHTML = "";

  for (const u of data) {
    const li = document.createElement("li");
    li.textContent = `${u.name} (${u.email}) `;

    const del = document.createElement("button");
    del.textContent = "Delete";
    del.addEventListener("click", async () => {
      try {
        await api(`/api/users/${u.id}`, { method: "DELETE" });
        await loadUsers();
      } catch (e) {
        setStatus(e.message);
      }
    });

    li.appendChild(del);
    list.appendChild(li);
  }
}

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  setStatus("");

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();

  if (!name || !email) return setStatus("Name + email required.");

  addButton.disabled = true;
  try {
    await api("/api/users", {
      method: "POST",
      body: JSON.stringify({ name, email }),
    });

    nameInput.value = "";
    emailInput.value = "";
    await loadUsers();
  } catch (err) {
    setStatus(err.message);
  } finally {
    addButton.disabled = false;
  }
});

loadUsers().catch((e) => setStatus(e.message));
