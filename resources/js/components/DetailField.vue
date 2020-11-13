<template>
  <panel-item :field="field">
    <div slot="value" v-if="field.value">
      <span>
        <span v-if="selected.iso_code">
          <img class="pr-2 h-4 w-8 align-middle" :src="field.iconsDirectory + '/' + selected.iso_code.toLowerCase().trim() + '.' + field.iconsFormat">
        </span>
        <span class="align-middle">
          {{ selected.label }}
        </span>
        <span class="text-xs align-middle">
          ({{ selected.country_code }})
        </span>
      </span>
    </div>
  </panel-item>
</template>

<script>
export default {
  props: ['resource', 'resourceName', 'resourceId', 'field'],

  computed: {
    selected () {
      this.options = this.field.options || []

      return this.options.find(item => item['country_code'] == this.field.value)
    },
  },
}
</script>
