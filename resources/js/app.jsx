// resources/js/app.jsx

import { createInertiaApp } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';
import React from 'react';
import { render } from 'react-dom';

createInertiaApp({
  resolve: name => import(`./Pages/${name}`).then(module => module.default),
  setup({ el, App, props }) {
    render(<App {...props} />, el);
  },
});

InertiaProgress.init();
