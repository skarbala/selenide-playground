Vue.component('modal', {
    template: '#modal-template'
});
// const baseUrl = 'https://www.potterapi.com/v1/sortingHat';
// const key = '$2a$10$f.wBgzvPPpAvJi0D1d1MOOC/uTEqHWqG6tGxfa/i2u.7ob7O9JGla';
const vue = new Vue({
        el: '#app',
        data: {
            result: '',
            loading: false
        },
        computed: {
            sortDisabled: function () {
                return this.loading;
            }
        },
        methods: {
            getResult: function () {
              this.result = getRandomHouse();
              this.disableLoading();
                // let url = new URL(baseUrl);
                // fetch(url)
                //     .then(response => response.json())
                //     .then(result => this.result = result)
                //     .then(this.disableLoading());
            },
            sort: function () {
                this.result = "";
                this.loading = true;
                setTimeout(function () {
                    this.getResult()
                }.bind(this), getRandomResponseTime());
            },

            disableLoading: function () {
                this.loading = false
            }
        }
    })
;

function getRandomResponseTime() {
    return Math.round(Math.random() * (3500 - 1000) + 1000);
}

function getRandomHouse(){
  var myArray = ['Gryffindor', 'Slytherin', 'Hufflepuff', 'Ravenclaw'];
  console.log(myArray[Math.floor(Math.random() * myArray.length)]);
  return myArray[Math.floor(Math.random() * myArray.length)];

}
