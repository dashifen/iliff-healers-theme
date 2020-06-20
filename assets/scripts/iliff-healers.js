document.addEventListener('DOMContentLoaded', () => {
    const htmlClassList = document.getElementByTagName('html')[0].classList;
    htmlClassList.remove('no-js');
    htmlClassList.add('js');
});
