<template>
    <div class="Box" :style="{ backgroundColor: bg }">
      <img class="Image" style="width: 120px;height: 120px;" :src="Img" alt="" />
      <div style="position: absolute; top:120px ;color:#253D4E;font-size: 16px;">{{ ItemName }}</div>
      <div style="position: absolute;bottom:1px;color:rgba(182, 182, 182, 1);font-family: Lato;font-size: 12px; size: 12px;">{{ Amount }}</div>
    </div>
  </template>
  
  <script>
  export default {
    name: "Category",
    props: {
      Img: String,
      ItemName: String,
      bg: String,
      Amount:String,
    },
  };
  </script>
  
  <style scoped>

  .Box {
    font-weight: 700;
    margin-right: 20px;
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 137px;
    height: 177px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .Image {
    margin-top: 0px;
    width: 120px;
    height: 120px;
  }
  </style>
  