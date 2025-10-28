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
    y: -50,
    ease: "ease2.inOut",
  });
}