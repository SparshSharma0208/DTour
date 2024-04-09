
  const items = document.querySelectorAll('.accordion-item button');

  items.forEach(item => {
    item.addEventListener('click', toggleAccordion);
  });

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    const accordionContent = this.nextElementSibling;

    for (let i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
      items[i].nextElementSibling.style.maxHeight = null;
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
      accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
    }
  }
