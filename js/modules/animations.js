export function initAnimations() {
  gsap.registerPlugin(ScrollTrigger);
  
    gsap.from(".hero-image", 1, {
    scrollTrigger: {
      trigger: ".home-hero",
      start: "top bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    ease: "power2.out",
  });

    gsap.from("#introduction img", 1, {
    scrollTrigger: {
      trigger: ".home-hero",
      start: "top bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    ease: "power2.out",
  });

  gsap.from(".button", 1, {
    scrollTrigger: {
      trigger: ".button",
      start: "top bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    ease: "power2.out",
  });

    gsap.from(".areas-card", 1, {
    scrollTrigger: {
      trigger: ".areas-cards-con",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    stagger: 0.2,
    ease: "power2.out",
  });

    gsap.from(".team-member", 1, {
    scrollTrigger: {
      trigger: ".team-cards-con",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    ease: "power2.out",
  });

    gsap.from(".office-card", 1, {
    scrollTrigger: {
      trigger: ".office-cards-con",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    ease: "power2.out",
  });

      gsap.from(".footer-nav a", 1, {
    scrollTrigger: {
      trigger: ".footer-nav",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    stagger: 0.2,
    ease: "power2.out",
  });

        gsap.from(".hero-title-2", 2, {
    scrollTrigger: {
      trigger: ".hero-title-2",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    ease: "power2.out",
  });

    gsap.from("#privacy-policy div", 2, {
    scrollTrigger: {
      trigger: ".privacy-title",
      start: "-50% bottom",
      end: "bottom 50%",
      toggleActions: "play none none reset",
      markers: false,
    },
    opacity: 0,
    y: 50,
    stagger: 0.2,
    ease: "power2.out",
  });
}