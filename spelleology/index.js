Vue.component('modal', {
    template: '#modal-template'
});
// const baseUrl = 'https://www.potterapi.com/v1';
// const key = '$2a$10$f.wBgzvPPpAvJi0D1d1MOOC/uTEqHWqG6tGxfa/i2u.7ob7O9JGla';
const vue = new Vue({
    el: '#app',
    data: {
        search: '',
        spells: [],
        selectedSpell: '',
        showModal: false

    },

    created: function () {
      setTimeout(function () {
          this.getData()
      }.bind(this), getRandomResponseTime());
        // let url = new URL(baseUrl + '/spells'),
        //     params = {key: key};
        // Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

    },


    computed: {
        filteredList: function () {
            return this.spells.filter((spell) => {
                return spell.effect.toLowerCase().includes(this.search.toLowerCase());
            });
        },
    },
    methods: {
        selectSpell: function (spell) {
            this.selectedSpell = spell;
            this.showModal = true;
        },
        getData: function(){
          fetch("spelleology/spells.json")
              .then(response => response.json())
              .then(data => this.spells = data);
        },
    },

});

function getRandomResponseTime() {
    return Math.round(Math.random() * (1500 - 1000) + 1000);
}
