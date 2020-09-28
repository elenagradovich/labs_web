//task10

const browserInfo = detect.parse(navigator.userAgent);
let redirectAddress = 'https://www.google.by';
if(browserInfo && browserInfo.browser.family.includes('Microsoft')) {
  redirectAddress = 'https://www.tut.by';
}

window.location.href = redirectAddress;