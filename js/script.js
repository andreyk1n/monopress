// Джаваскрипт файл для роботи з
// елементами на сторінці

document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.header__burger');
    const nav = document.querySelector('.header__nav');
    const body = document.body;
    burger.addEventListener('click', (event) => {
        event.stopPropagation();
        burger.classList.toggle('active');
        nav.classList.toggle('active');

        if (burger.classList.contains('active')) {
            body.classList.add('no-scroll');
        } else {
            body.classList.remove('no-scroll');
        }
    });
    document.addEventListener('click', (event) => {
        if (!nav.contains(event.target) && !burger.contains(event.target)) {
            if (nav.classList.contains('active')) {
                burger.classList.remove('active');
                nav.classList.remove('active');
                body.classList.remove('no-scroll');
            }
        }
    });
});

const accordions = document.querySelectorAll(".accordion__header");
const allItems = document.querySelectorAll(".accordion__item");
const toggleAccordion = (accordion) => {
    const currentItem = accordion.parentElement;
    const isActive = currentItem.classList.contains("accordion__item--active");
    allItems.forEach((item) => {
        if (item !== currentItem) {
            item.classList.remove("accordion__item--active");
            item.querySelector(".accordion__content").style.maxHeight = null;
        }
    });
    if (!isActive) {
        currentItem.classList.add("accordion__item--active");
        const content = currentItem.querySelector(".accordion__content");
        content.style.maxHeight = `${content.scrollHeight}px`;
    }
};
accordions.forEach((accordion) => {
    accordion.addEventListener("click", () => toggleAccordion(accordion));
});
if (allItems.length > 0) {
    const firstAccordion = allItems[0];
    firstAccordion.classList.add("accordion__item--active");
    const firstContent = firstAccordion.querySelector(".accordion__content");
    firstContent.style.maxHeight = `${firstContent.scrollHeight}px`;
}

window.addEventListener('scroll', () => document.querySelector('.header').classList.toggle('header--scrolled', window.scrollY > 0));