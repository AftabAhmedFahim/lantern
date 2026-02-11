document.addEventListener("DOMContentLoaded", () => {
    // ================= Scroll Reveal =================
    const reveals = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            entry.target.classList.toggle("active", entry.isIntersecting);
        });
    }, { threshold: 0.2 });

    reveals.forEach(el => observer.observe(el));

    // ================= Mobile Menu =================
    const menuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    const closeMenu = () => {
        if (!mobileMenu) return;
        mobileMenu.classList.add("hidden");
        menuBtn?.setAttribute("aria-expanded", "false");
    };

    const toggleMenu = () => {
        if (!mobileMenu) return;
        const isHidden = mobileMenu.classList.contains("hidden");
        mobileMenu.classList.toggle("hidden", !isHidden);
        menuBtn?.setAttribute("aria-expanded", String(isHidden));
    };

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        mobileMenu.addEventListener("click", (e) => e.stopPropagation());
        document.addEventListener("click", closeMenu);
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") closeMenu();
        });
    }

    // ================= Scroll Arrow =================
    const arrow = document.getElementById("scroll-arrow");

    const hideArrow = () => {
        if (!arrow) return;
        arrow.classList.add("opacity-0", "pointer-events-none");
    };

    const showArrow = () => {
        if (!arrow) return;
        arrow.classList.remove("opacity-0", "pointer-events-none");
    };

    if (arrow) {
        arrow.addEventListener("click", () => {
            window.scrollTo({ top: window.innerHeight, behavior: "smooth" });
            hideArrow();
        });

        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) hideArrow();
            else showArrow();
        });
    }

    // ================= Loader =================
    const loader = document.getElementById("page-loader");
    window.addEventListener("load", () => {
        if (!loader) return;
        setTimeout(() => {
            loader.classList.add("hidden");
            setTimeout(() => loader.remove(), 1200);
        }, 700);
    });
});
