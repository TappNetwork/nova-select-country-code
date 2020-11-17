<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">
      <v-select
        v-model:value="selected"
        v-bind:options="options"
        v-bind:disabled="field.readonly"
        v-bind:multiple="false"
      >
        <template v-slot:no-options>
          <span>Sorry, no options available!</span>
        </template>
        <template v-slot:option="option">
          <span v-if="option.iso_code">
            <img class="pr-2 h-4 w-8 align-middle" :src="field.iconsDirectory + '/' + option.iso_code.toLowerCase().trim() + '.' + field.iconsFormat">
          </span>
          <span>
            {{ option.label }}
            <span class="text-xs">
              ({{ option.country_code }})
            </span>
          </span>
        </template>
        <template v-slot:selected-option="option">
          <span>
            {{ option.label }}
            <span class="text-xs">
              ({{ option.country_code }})
            </span>
          </span>
        </template>
      </v-select>
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import vSelect from 'vue-select'

export default {
  components: {
    vSelect
  },

  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  data () {
    return {
      selected: '',
      options: [],
    }
  },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.options = this.field.options || []

      if (this.field.value) {
        this.value = this.field.value || ''
        this.selected = this.options.find(item => item['country_code'] == this.field.value)
      }
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.selected ? this.selected.country_code || '' : '')
    },
  },
}
</script>
