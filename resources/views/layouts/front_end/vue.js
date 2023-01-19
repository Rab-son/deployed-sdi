<template> <div>
<input id="num1" @change="updateNumbers" type="number"> <input id="num2" @change="updateNumbers" type="number">
Sum: <span class="sum" v-text="sum"></div><br />
Product: <div class="multiplication" v-text="product"></div>
</div>
</template>
<script>
export default {
name: "NumbersOperation",
data() {
return {
num1: 0,
num2: 0
}
},
methods: {
udateNumbers() {
this.num1 = document.querySelector("#num1").value; this.num2 = document.querySelector("#num2").value;

}

},
computed: { sum() {
},
var total = this.num1 + this.num2; return total;
product() {
var total = this.num1 * this.num2; return total;
}
 }

},
</script>