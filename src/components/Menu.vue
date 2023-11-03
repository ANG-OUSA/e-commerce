<template>
    <div>
        <div>
            <p class="feature">{{ menu_text }}</p>
        </div>
        <div>
            <p></p>
        </div>
    </div>

    
</template>

<script>
export default {
    name: "Menu",
    props: {
      menu_text: String,
    },
};

</script>

<style>
.feature {
    width: 432px;
    height: 40px;
    color: #253D4E;
    font-size: 32px;


}
</style>