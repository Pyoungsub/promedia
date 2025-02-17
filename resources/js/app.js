import './bootstrap';
<<<<<<< HEAD
import './common';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
=======

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'
window.Alpine = Alpine;
Alpine.plugin(mask);
Alpine.start();
>>>>>>> bc662e7 (modified code)
