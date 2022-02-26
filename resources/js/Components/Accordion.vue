<template>
  <div class="accordion" id="accordionExample">
    <div class="bg-white border border-gray-200 accordion-item">
      <h2 class="mb-0 accordion-header" id="headingOne">
        <button
          class="relative flex items-center w-full px-5 py-4 text-base text-left text-gray-800 bg-white border-0 rounded-none accordion-button transition focus:outline-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseOne"
          aria-expanded="true"
          aria-controls="collapseOne"
        > Accordion Item #1 
        </button>
      </h2>
      <div
        id="collapseOne"
        class="accordion-collapse collapse show"
        aria-labelledby="headingOne"
        data-bs-parent="#accordionExample"
      >
        <div class="px-5 py-4 accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default,
          until the collapse plugin adds the appropriate classes that we use to style each
          element. These classes control the overall appearance, as well as the showing and
          hiding via CSS transitions. You can modify any of this with custom CSS or overriding
          our default variables. It's also worth noting that just about any HTML can go within
          the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
</template>
<script>

export default {
  props: [ 
	"modelValue", 
	'label' ,
	'colspan' ,
	'id' ,
	'name' ,
	'message' ,
	'placeholder' ,
	'type',
  ],

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.input.focus();
    },
	change(){
	}
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

