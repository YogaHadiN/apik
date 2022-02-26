<template>
  <div class="col-span-6 sm:col-span-6">
	<label class="block text-sm font-medium text-gray-700">{{ labelc }}</label>
	<flat-pickr 
	  :class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
	  :config = "config"
	  @input  = "$emit('update:modelValue', $event.target.value)"
	  :value  = "modelValue"
	 />
	<div v-show="message">
		<p class="text-sm text-red-600">
			{{ message }}
		</p>
	</div>
  </div>
</template>
<script>
import FlatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
export default {
  data() {
	  return {
		config: {
		  altFormat: "d F Y",
		  altInput: true
		},
	  }
	},
  props: [ 
	"modelValue", 
	'label' ,
	'message' ,
  ],
  components: {
	FlatPickr
  },

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.select.focus();
    },
  },
  computed: {
	labelc(){
	  var newLabel = this.label.replace(/_/g, ' ');
	  return newLabel.replace(
		/\w\S*/g,
		function(txt) {
		  return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		}
	  );
	}
  }
};
</script>

