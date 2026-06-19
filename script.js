// Prevent browser hash from scrolling to About after refresh
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

const username = "malhotraridhima914-eng";

fetch(`https://api.github.com/users/${username}/repos`)
  .then(response => response.json())
  .then(repos => {

    const container =
      document.getElementById("projects-container");

    repos.forEach(repo => {

      const card = document.createElement("div");

      card.classList.add("project-card");

      card.innerHTML = `
        <h3>${repo.name}</h3>

        <p>
          ${repo.description || "No description available"}
        </p>

        <a href="${repo.html_url}"
           target="_blank">
           View Project
        </a>
      `;

      container.appendChild(card);

    });

  });
