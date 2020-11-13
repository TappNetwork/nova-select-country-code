Nova.booting((Vue, router, store) => {
  Vue.component('index-select-country-code', require('./components/IndexField'))
  Vue.component('detail-select-country-code', require('./components/DetailField'))
  Vue.component('form-select-country-code', require('./components/FormField'))
})
