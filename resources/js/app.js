require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import moment from 'moment';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, App, props, plugin }) {

        const app =  createApp({render: () => h(App, props)})
            .use(plugin)
            .mixin({methods: {
              route,
              isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                  evt.preventDefault();;
                } else {
                  return true;
                }
              },
            }});

        app.config.globalProperties.$filters = {
            currency(value) {
			  if (value) {
				  return 'Rp. ' + new Intl.NumberFormat('en-US').format(value)
			  }
            },
			formatDate(value) {
			  if (value) {
				  return moment(String(value)).lang('id').format('LL')
			  }
			},
			formatDateSearch(value) {
			  if (value) {
				  return moment(String(value)).lang('id').format('YYYY-MM-DD')
			  }
			}
            // Put the rest of your filters here
        }
        app.mount(el);
    },
});

InertiaProgress.init({  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
 color: '#4B5563' ,

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: true,
});
