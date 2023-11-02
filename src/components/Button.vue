<template>
    <button style="{background-color: backgroundColor;}">
        <p class="text1">Shop Now
            <font-awesome-icon :icon="['fas', 'arrow-right']" style="color: white; margin-left: 15px;"/>
        </p>
    </button>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { library } from "@fortawesome/fontawesome-svg-core";
library.add(fas);

    export default{
        name: "Button",
        components:{
            FontAwesomeIcon,
        },
        props:{
            backgroundColor:String,
        }

    };
</script>


<style scoped>

.button {
    width: 120px;
    height: 30px;
    padding: 8px, 15px, 8px, 15px;
    display: flex;
    align-items: center;
    flex-direction: row;
    color: white;
   
}
.text1{
        font-weight: 800;
        font-size: 12px;
        color: white
    }

</style>
