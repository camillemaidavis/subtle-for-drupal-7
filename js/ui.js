header = document.querySelector('header');
toggle = document.getElementById('toggle').querySelector('button');
links = document.getElementById('links');

links.classList.add('hidden');
links.ontransitionend = function() {
        this.style.maxHeight = '';
        if (!toggle.classList.contains('is-active')) {
            links.classList.add('hidden');
        }
};

link = document.querySelectorAll('a');
for (var i = 0; i < link.length; i++) {
    link[i].addEventListener('click', toggleMenu);
}

toggle.addEventListener('click', toggleMenu);

function fullHeight(el) {
    var height = 0;
    for (i = 0; i < el.children.length; i++) {
        height += el.children[i].offsetHeight;
    }
    return height;
}

function toggleMenu() {

    toggle.classList.toggle('is-active'); 

    if (links.classList.contains('hidden')) {
        links.classList.remove('hidden'); 
        links.style.maxHeight = '0';
        window.requestAnimationFrame(function() {
            window.setTimeout(function() {
                links.style.maxHeight = fullHeight(links) + 'px';
            });
        });
        return;
    }
    
    links.style.maxHeight = fullHeight(links) + 'px';
    window.requestAnimationFrame(function() {
        window.setTimeout(function() {
            links.style.maxHeight = '0';
        });
    });

}
