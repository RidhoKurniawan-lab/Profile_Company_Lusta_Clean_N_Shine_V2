export const $ = (s, el = document) => el.querySelector(s);

export function on(event, selectorOrHandler, handler) {
  // MODE GLOBAL
  if (typeof selectorOrHandler === 'function') {
    document.addEventListener(event, selectorOrHandler);
    return;
  }

  // MODE DELEGATION
  document.addEventListener(event, e => {
    const target = e.target.closest(selectorOrHandler);
    if (target) handler(e, target);
  });
}
