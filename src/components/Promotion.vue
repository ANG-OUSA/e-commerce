<template>
    <div class="size" :style="{backgroundColor: bgcolor}">
        <div style="display: flex; ">
            <div>
                <p class="text">{{ Name }}</p>
                <Button class="btn" :style="{backgroundColor: btnColor}"></Button> 
            </div>
            
            <img style="width: 450px;object-fit: contain;" class="image" :src="image" alt="image">
            
            
        </div>
    </div>
</template>

<script>
import Button from "./Button.vue";
export default {
    name: "Promotion",
    components: {
        Button,
    },
    props:{
        bgcolor: String,
        image:  String,
        btnColor: String,
        Name: String,
    },
}
</script>

<style>
.size {
    position: relative;
    width: 512px;
    height: 300px;
    /* color: blue; */
    /* background-color: gray; */
    border-radius: 10px;
    margin-top: 77px;
    /* margin-left: 20px; */
    margin-right: 24px;
    display: flex;
}
.btn {
    position: absolute;
    width: 109px;
    height: 32px;
    top: 190px;
    left: 48px;
    background-color: #3BB77E;
    border-radius: 3px;
    z-index: 1;
}
.image {
    position: absolute;
    bottom: 0;right: 0;

    

}
.text {
    font-family: Quicksand;
    width: 271px;
    height: 48px;
    position: absolute;
    left: 40px;
    top: 75px;
    font-weight: 700;
    font-size: 24px;
    z-index: 2;

}
</style>