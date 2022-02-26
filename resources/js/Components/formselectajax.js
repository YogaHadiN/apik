import axios from 'axios'
import Multiselect from '@vueform/multiselect'
export default {
  components: {
    Multiselect
  },
  data(){
    return {
      value: null,
      placeholder: 'Choose a programming language',
      filterResults: false,
      minChars: 1,
      resolveOnLoad: false,
      delay: 0,
      searchable: true,
      options: async (query) => {
        const fd = new FormData();
        axios.post('/generiks/get/options/' + query, fd)
          .then( data => {
			return data.data.map((item) => {
			  return { value: item.id, label: item.generik }
			});
		  })
		}
      }
	},
  emits: ["update:modelValue"],
  props : ['modelValue']
}

