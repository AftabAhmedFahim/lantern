function initParticles() {
  const el = document.getElementById("particles-js");
  if (!el) return;
  if (typeof window.particlesJS !== "function") return;

  window.particlesJS("particles-js", {
    particles: {
      number: { value: 60, density: { enable: true, value_area: 900 } },
      color: { value: "#6EC1FF" },
      shape: { type: "circle" },
      opacity: { value: 0.18, random: true },
      size: { value: 2.2, random: true },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#6EC1FF",
        opacity: 0.12,
        width: 1
      },
      move: { enable: true, speed: 1.2, direction: "none", out_mode: "out" }
    },
    interactivity: {
      detect_on: "window",
      events: {
        onhover: { enable: true, mode: "grab" },
        onclick: { enable: false },
        resize: true
      },
      modes: {
        grab: { distance: 180, line_linked: { opacity: 0.18 } }
      }
    },
    retina_detect: true
  });
}

function initPasswordToggles() {
  document.querySelectorAll("[data-toggle-password]").forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetSel = btn.getAttribute("data-target");
      if (!targetSel) return;

      const input = document.querySelector(targetSel);
      if (!input) return;

      const isHidden = input.getAttribute("type") === "password";
      input.setAttribute("type", isHidden ? "text" : "password");

      btn.setAttribute("aria-pressed", isHidden ? "true" : "false");
      btn.setAttribute("aria-label", isHidden ? "Hide password" : "Show password");
      btn.textContent = isHidden ? "🙈" : "👁";
    });
  });
}

function initCapsLockDetection() {
  const passwordInputs = document.querySelectorAll('input[type="password"], input[type="text"]');

  function updateCapsWarning(input, e) {
    const sel = `#${input.id}`;
    if (!input.id) return;

    const warning = document.querySelector(`[data-caps-for="${sel}"]`);
    if (!warning) return;

    // Only check on keyboard events where modifier state exists
    const capsOn = e && typeof e.getModifierState === "function" && e.getModifierState("CapsLock");
    warning.hidden = !capsOn;
  }

  // Only attach to inputs that have caps warning marker
  document.querySelectorAll("[data-caps-for]").forEach((warningEl) => {
    const targetSel = warningEl.getAttribute("data-caps-for");
    const input = document.querySelector(targetSel);
    if (!input) return;

    input.addEventListener("keydown", (e) => updateCapsWarning(input, e));
    input.addEventListener("keyup", (e) => updateCapsWarning(input, e));
    input.addEventListener("focus", (e) => updateCapsWarning(input, e));
    input.addEventListener("blur", () => { warningEl.hidden = true; });
  });
}

function setupAuthSlide() {
  const card = document.querySelector(".auth-card-classic");
  if (!card) return;

  document.querySelectorAll("[data-auth-slide]").forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault();

      const dir = el.getAttribute("data-auth-slide"); // to-register | to-login
      const href = el.getAttribute("data-href") || el.getAttribute("href");
      if (!href) return;

      // Hide content during slide (your previous feature)
      card.classList.add("is-sliding");

      card.classList.remove("slide-to-register", "slide-to-login");
      card.classList.add(dir === "to-register" ? "slide-to-register" : "slide-to-login");

      setTimeout(() => {
        window.location.href = href;
      }, 650);
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  initParticles();
  initPasswordToggles();
  initCapsLockDetection();
  setupAuthSlide();
});
