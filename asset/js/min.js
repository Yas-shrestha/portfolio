const tween = KUTE.fromTo(
  "#blob1",
  { path: "#blob1" },
  { path: "#blob2" },
  { repeat: 999, duration: 2000, yoyo: true }
);
tween.start();
const second = KUTE.fromTo(
  "#blob3",
  { path: "#blob3" },
  { path: "#blob4" },
  { repeat: 999, duration: 2000, yoyo: true }
);
second.start();
// const wave = KUTE.fromTo(
//   "#wave1",
//   { path: "#wave1" },
//   { path: "#wave2" },
//   { repeat: 999, duration: 2000, yoyo: true }
// );
// wave.start();
