function initializeSkrollrOnDesktop() {
    const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  
    if (screenWidth > 920) {
        var s = skrollr.init();
    }
}
  
window.addEventListener('load', initializeSkrollrOnDesktop);