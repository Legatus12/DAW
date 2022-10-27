const app = Vue.createApp({
    data() {
        return {
            num : 0,
            item : 0,
            items : [],
        }
    },
    methods:{
        increase(){
            this.num += 1;
            if(this.num % 3 == 0 && !this.items.includes(this.num) && this.num != 0){
                this.item = this.num;
                this.items.push(this.item);
            }
        },
        decrease(){
            this.num -= 1;
            if(this.num % 3 == 0 && !this.items.includes(this.num) && this.num != 0){
                this.item = this.num;
                this.items.push(this.item);
            }
        },
    },
});
app.mount('#app');