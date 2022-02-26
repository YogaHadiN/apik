// @ts-ignore
import Multiselect from '@vueform/multiselect'
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios'
import "@vueform/multiselect/themes/default.css"

export default {
  components: {
	Multiselect,
	BreezeAuthenticatedLayout,
	Head
  },
  data: () => ({
	example6: {
	  filterResults: false,
	  minChars: 3,
	  clearOnSearch: true,
	  closeOnSelect : true,
	  clearOnSelect: true,
	  resolveOnLoad: false,
	  delay: 0,
	  searchable: true,
	  options: async (query) => {
		return await fetchLanguages(query)
	  }
	},
  }),
}
  const fetchLanguages = async (query) => {
	let data = await axios.post('/generiks/get/options/' + query);
	return data.data.map((item) => {
	  let ret = { value: item.id.toString(), label: item.generik }
	  console.log('ret');
	  console.log(ret);
	  return ret;
	});
}

