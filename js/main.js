(function () {
    const navToggle = document.querySelector(".nav-toggle");
    const body = document.body;

    if (navToggle) {
        navToggle.addEventListener("click", function () {
            const open = navToggle.getAttribute("aria-expanded") === "true";
            navToggle.setAttribute("aria-expanded", String(!open));
            body.classList.toggle("nav-open", !open);
        });
        document.querySelectorAll("#site-nav a").forEach(function (link) {
            link.addEventListener("click", function () {
                body.classList.remove("nav-open");
                navToggle.setAttribute("aria-expanded", "false");
            });
        });
    }

    const applyLang = function (lang) {
        document.documentElement.lang = lang;
        document.querySelectorAll("[data-sw][data-en]").forEach(function (el) {
            if (el.children.length) return;
            const value = el.getAttribute(lang === "en" ? "data-en" : "data-sw");
            if (value) el.textContent = value;
        });
        const skip = document.querySelector(".skip-link");
        if (skip) skip.textContent = lang === "en" ? "Skip to content" : "Ruka kwenda maudhui";
        document.querySelectorAll(".lang-switch button").forEach(function (btn) {
            btn.classList.toggle("is-active", btn.getAttribute("data-lang") === lang);
        });
        localStorage.setItem("pedima-lang", lang);
    };

    const saved = localStorage.getItem("pedima-lang") || "sw";
    applyLang(saved);

    document.querySelectorAll(".lang-switch button").forEach(function (btn) {
        btn.addEventListener("click", function () {
            applyLang(btn.getAttribute("data-lang"));
        });
    });

    const form = document.getElementById("wa-form");
    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            const name = document.getElementById("name").value.trim();
            const need = document.getElementById("need").value;
            const message = document.getElementById("message").value.trim();
            const text = "Habari Pedima Enterprises, naitwa " + name + ". Nahitaji: " + need + ". " + message;
            const wa = form.getAttribute("data-wa") || "255613100100";
            window.open("https://wa.me/" + wa + "?text=" + encodeURIComponent(text), "_blank", "noopener");
        });
    }
})();
