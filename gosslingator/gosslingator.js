new Vue({
    el: '#app',
    data: {
        ryans: []
    },
    methods: {
        addRyan: function () {
            let ryan = {
                id: this.ryans.length + 1,
                width: Math.floor((Math.random() * 250) + 50),
                top: Math.floor((Math.random() * 500) + 50),
                left: Math.floor((Math.random() * document.body.clientWidth) - 200)
            };
            this.ryans.push(ryan);
        },
        removeSpecificRyan: function (ryan) {
            let index = this.ryans.map(ryan => {
                return ryan.id;
            }).indexOf(ryan.id);
            this.ryans.splice(index, 1);
        },
        removeRyan: function () {
            this.ryans.splice(-1, 1)
        }
    },
    computed: {
        isDisabled: function () {
            return this.ryans.length === 0;
        },
        tooManyRyans: function () {
            return this.ryans.length >= 50;
        },
        ryanCounterDescription: function () {
            if (this.ryans.length === 1) return 'ryan';
            return 'ryans';
        }
    }
})
;