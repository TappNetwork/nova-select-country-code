<template>
  <panel-item :field="field">
    <div slot="value" v-if="field.value">
      <span>
        <span v-if="selected.country_code === '+1'" class="align-middle">
          United States and Canada
        </span>
        <span v-else-if="selected.country_code === '+7'" class="align-middle">
          Russia and Kazakhstan
        </span>
        <span v-else class="align-middle">
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
