// resources/js/pages/about.js

document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle (same behavior as welcome)
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");
  const icon = btn?.querySelector("img");

  if (btn && menu) {
    btn.addEventListener("click", () => {
      const isHidden = menu.classList.contains("hidden");
      menu.classList.toggle("hidden");

      btn.setAttribute("aria-expanded", String(isHidden));

      // swap icon (open/close)
      if (icon) {
        icon.src = isHidden
          ? "/images/icons/close.svg"
          : "/images/icons/open.svg";
      }
    });

    // close menu if clicked outside
    document.addEventListener("click", (e) => {
      if (!menu.classList.contains("hidden")) {
        const clickedInside = menu.contains(e.target) || btn.contains(e.target);
        if (!clickedInside) {
          menu.classList.add("hidden");
          btn.setAttribute("aria-expanded", "false");
          if (icon) icon.src = "/images/icons/open.svg";
        }
      }
    });
  }
});
