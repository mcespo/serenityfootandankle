// This is all you.
// import focus from "@alpinejs/focus";
import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";

Alpine.plugin(focus);
Alpine.plugin(intersect);
window.Alpine = Alpine;

Alpine.start();
