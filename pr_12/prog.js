const tbody = document.querySelector("tbody");

const getUsersFromServer = async () => {
    const users = await axios
        .get("https://jsonplaceholder.typicode.com/users")
        .then((response) => response.data);
    for (const user of users) {
        const tr = document.createElement("tr");
        const row = `
            <td>${user.id}</td>
            <td>${user.name}</td>
            <td>${user.username}</td>
            <td>${user.phone}</td>
            <td>${user.email}</td>
            <td><a href='${user.website}' class='text-info'>${user.website}</a></td>
        `;
        tr.innerHTML = row;
        tbody.appendChild(tr);
    }
};

getUsersFromServer();