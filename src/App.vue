<template>
  <!-- This is my first VUE project -->
  <!-- <Button color="red" text="hello"></Button>
  <Button text="shop"></Button> -->
  <!-- <Button text="shop now"></Button> -->
  <div>
    <div class="Category" style="display: flex; height: 120px; margin-bottom: 40px;">
    <Category
        v-for="i in Category"
        :bg="i.bg"
        :ItemName="i.ItemName"
        :Img="i.Img"
        :Amount="i.Amount">
    </Category>
  </div>
  <div style="display: flex">
    <Promotion v-for="i in Promotion" 
    :image="i.image"
    :bgcolor="i.bgcolor"
    :btnColor="i.btnColor"
    :Name="i.Name"
    >
    </Promotion>
  </div>

  </div>
  
  
  
  

</template>

<script>
import Button from "./components/Button.vue";
import Promotion from '@/components/Promotion.vue';
import Category from "./components/Category.vue";


export default {
  name: "App",
  components: {
    Button,
    Promotion,
    Category,
  },
  data() {
    return {
      Promotion: [
      {
        Name: "Everyday fresh & clean with our products",
        image:  "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1699833600&Signature=BopNMeaoYpayx-Epz2eU-MbKTcy37aptwt-6wMUbZ6Mt8k5wuNRsq-yfIYHMpIyAI0hFl6N~P2GQekhYEpysnvQ2tJebN~Omsv8lCoICbXONhWAd9iyfMQqvEjZ-74Eyi9DWiX8JQuclXSCY9zlrzedu2fwO8fJzbWF-zfAk49J9o3oRB3XUz9XXvAhPHQ5x7Eo5uzB9jluL1JzkmMzuYq8LRqBHJxwH3NBB3aoC5JmwL-~A1SfB6DRCUfElZSswO~7bGHfx5Q3zpV5d-t6xlkkc~EXCLGD0vRpoQSHe-8J9WS16pos4WUU-bYexswtrUJZMPcSwvtRGxu4DCUlKaA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        bgcolor: "#F0E8D5",
        btnColor: "#3BB77E",    
      },
      {
        Name: "Make your breakfast healthy and easy",
        image:  "./src/assets/photo_2023-11-01_11-30-42-removebg-preview.png",
        bgcolor: "#F3E8E8",
        btnColor: "#3BB77E",    
      },
      {
        Name: "The best organic products online",
        image:  "https://s3-alpha-sig.figma.com/img/4d69/6151/8879bc373bf5fcc1578bcec5172b087b?Expires=1699833600&Signature=Fcyz23Cuci2YfyswiwIYuvnXpqTqeT2BzsUhksKvplJbkgsGcaO0-X1M8nHVl6CDFfd2zHhxeXzTZjzCf45kWe6VcYwcgk3TodKvldeQ~xEuTUcQTvu03EaEqdVQ2c-eTZDcm8Y1uQElWeqsN7zLJng0njznWVkFu0AYde-dYfvJulOW7~CmtPCIZbiSXTzxwsS3t712VhAYvjRwMca1cViLQirep7rcRPdGz-WGUn8NVhD9HUzmf9PtXQoqL8-Oq3hiyxUfQ0meqDc594uZ2MGgnSZ6mfbvaHPxp845r4h7q87NCVXpYa8mku3sAD-2b4B1ME6uFa6nyJgggtEUbA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        bgcolor: "#E7EAF3",
        btnColor: "#FDC040",    
      },
      ],
      Category: [
      {
        Img: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1699228800&Signature=L-reokY4cdElwI8HHeS9iKW58ip98C93-H~HpTII~Px9MXnLDATcnx-ZaQv5AXB6weQwhTXCekkyWSSLxJGsBqOLWxlzhDKADaXO-4HoKz6q-crjH6nX6-XIW0HQzfmxFRIGb9NP6sxwik7gx5fDpOzQLeVu5U~Js6kcysvwNVBRf9g90BJBjOWxV6UyIVchOYCaRFZgvZv-pCGevQhQ0RzENRzyWu15Ps~xweWRVAFAqYQwSO~hQbFULB~4ohbZ9Zxu3sxuXEyWg8Tg8P3KWIzvM2J190-H2Gazbsy-scpr4-rsf9PXWPMCD~i62IEhAAo8xjJwj5yyDR-a-VY8LQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        bg: "rgba(242, 252, 228, 1)",
        ItemName: "Cake & Milk",
        Amount: "14 items",
      },
      {
          Img: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1699228800&Signature=AjaIbOz4vXHTQB3cppDgmHH2Fh19-5-v~Xk8~4QtaBgZTkfEheHIroNoviPxyaFyIgmc5xpilhBFrOD5tl-rv30Ib57gNpbtBOpGKACi1oUkoKN6cYgMgq7tTb5TnC6kuMCFriLwS3-Imfc2A5Mxuu7Z9K4dgPmJw-7~ENw2JG9tkhFgBeeFA8PmQ1c2RPVZMMfASzYRIOy8bRjL4G9sJsLUlX~neYV1haHeStmLkh-c-Gb2iq1yFgHPkOOL8Eh7orJ8JFDbJ3y~DiPPlGVhsYEVw2NfS7FrZg71hxXqUaJnpbFyHZBio~LNgOIoyXQf3pbDBwMp0lRKF6nM1FkFPA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 252, 235, 1)",
          ItemName: "Peach",
          Amount: "17 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1699833600&Signature=SVfj1ycsGcreHWOHTDYE7MakOwpk5lkKmu8TeP5AllFZB~RXeF3wduHLgtaBGjhQk~czlgDCh4yMXzttdFfSL19X0CDpGrMghsOsQd1cSUPSTwjcOh1BQgQF6qX7cj7wNsU4FYeQ8so92HtjVdm1mVcHvtxfjYntQlds7TB9eW9ZQJoKag~TWM6ocQBITJLLyKCivxYp2wgPSFCkriZnXiMXSUzSP2pTU3ynv4a9T7c6tgwax3s5tiXKx-gRKAkl3mdPpHa0qmxx8Gb-K0ksLWvzS4GRMfFnZw5SVCAiumSjvPfjPIhr3V~X6uzbw2qNyEaHuwM~4hXmEbZDneXykw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#ECFFEC",
          ItemName: "Organic Kiwi",
          Amount: "21 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1699228800&Signature=RUyjjQZu0vHwqMGA2tETdz5BZsdFu~HsUi2bVat2bVGohJmc5N7iOkgd8HxmxE4IbOineAEcLGTQPafPxBS9vTsOl-jUyDAM-K7QfG9HqZHGmj5sE~ypeoj9A-c5sEoODcIg5ow3uPSoE0W83CXz6NIpLvUv5XEGnEGxg3vmqf9pB0xMxVaNqlgEejFVZvm~6xbRHCXL6ja6Mxn76QKXxxAe1a9aXsZOZ7BUep7srGo-~YW2h94FHgQzzfJQQzX6O-xoTLJtN8yMCZpk68AmqRPUqnBNFexmDyoob9UmclS2RP9iNG-62Tm6ZcOi4WHIzc9RV98xefhfYwL8VJYBug__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#FEEFEA",
          ItemName: "Red Apple",
          Amount: "68 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1699833600&Signature=RRKQtVEpA~7vCDr5cobXciLHTNELEC9v-hZDzZEj0rivcS~pgZaCrvu1lo-UJtaNgCqenuo-Fi7ZzxvFgNlUMAMdgeAT1eIkdyjO6aT-gV7wk-HV-b1TAf7XrcJE1aCiTp9gY8bz3pEnf6XKkqM6oSovCP4I~jBeCRJnRSrF49RpJBwhnfR5r-ixEwybyIxKc2WZ0ExyqatE-MpsfRMLXdh8jqmxwb64b1rRpH4GOlPvg0u2dgZlOud2DgBhKl1y6lW6i6sQ2UxtN2~m2Cf0aHvwuGHJ7anev1jDsIFLnDQg4w5iPTXnWRM7tTp1KpU0-3weVligqoHLjmAGV1kJBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 243, 235, 1)",
          ItemName: "Snack",
          Amount: "34 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1699833600&Signature=YL1P41RPODYUqlRbRpFI7l5JafECERaPx7-jTsgY8LM-c-9bolTqwRx1J54YiYXXPlutJdIpZF4Nu~LKICq8khhHghdVH3unGdqcrj35Gny2QdsJC78L8UAZRHJ3eKzOJL-vopTA72V6FXAcf9PJLneQ78KPP72R~HywsPeLTlwxFzj5pZjTI-yeU1zDM~XwO9pTOebx5YDaLH9lQnGXR7PFw5CB79R9JqOzFpriNecpgrQNBIHGbtqo~XF8ENarO5s3~RJlXIUDuAEQkcPky-zwRsrngemqWzf1juegho4RXk3DcvOxhQFH7yQ~spK1El71NtKcAdzV0cSiZjlBEQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#FFF3FF",
          ItemName: "Black plun",
          Amount: "25 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1699833600&Signature=J5bhwwHy-8EhZxf~pW2L9qcDo4RLXcvYDPCdDmOyBY~C3BUWWIc5Wn4KUAtXk2biIeJaZj~Dt0epPcSGz4Rgwcg2AkDQ65CYDztMsj9NKscS40nQVqoIQwIhYSufQdv8zkHFQYJ5htdr3ceMLGwdDyH~qe83FC40J~TtkcPJxjPfAQE8XnbrUox5ER0gS5ndWF02rxHBhdgKz~~HKAxzqmL-oRc1iDDD6VZj3ZFTnamSfk5PdeuhnAFCPRy6uvzZr2xiRSRyGjYsxbqv9gJS0UoUhfgfp3HCZ~smR-dQhoA2Ide4gpWwkzKAJdyb8gUg3ER7yj0joHqU7sklQzrWUg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#F2FCE4",
          ItemName: "Vegetables",
          Amount: "65 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1699833600&Signature=JpBVjKtSL-91DazsiQO3MgkyvztdmXjSbYG51BReJcHZnW4KQ-BvsNH0KbpvM2K5KrpTPStIe~tLSVmAsmTKQqceGy4tMDiI8~tdkYHulh5vJmOgLLa3IAq~YB-ZffrX-0Wc2cI1twiQzjVGVhik5Hz1EYRuE4xAbzUdW5CFeiK9qN3NtJ9xpuAmJXOsUmUjgTtFYWcorjfpCKmVUkI-g7fwheaQZf8egCO8eaedzshVmprQw2D9KZWpvikTvkOeKg8zZezcDsCxbQ~K~AICT-Xp9dtb8-sTXzkHV0ckb~fEvd6QxbhYBYoVqU9Zs9aO-vdpwiG0QpmZZZLCkpAtDQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#FFFCEB",
          ItemName: "Headphone",
          Amount: "33 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1699833600&Signature=pg4YVVgnJVPU82pFrb5TZqIW86nanB5A2pL2q9iEpqZ8b99ZlW7MxslUGQ0DlGXb-7zRkzEbXgCj-~d-tTYqx5-QqQmg3iXAwjEv5ckj25lnw~mpt2k3X7eFwGUQo42XHSWKNeE1X3hCZOXH0BZAoxIz-Ks8lAJeZ7cLBZEH6xyVYxfQBxoR88F2A8c0BBLPjFgDzZxV0Rsbl4GMm8MYReGby0Z6MJFTHZqNhI4Y0o8cC0fUvN8RuWpvxdPr~mPMufJwPb4U9MeQusBPxo7tiExuix-HvpMNP7fzIAqtJzMIFKqF32trLoWTXFW99G0k-TuVIdRJdJehZIb9ISBbtQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#F2FCE4",
          ItemName: "Cake & Milk",
          Amount: "54 items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1699833600&Signature=UdhxWsqWNaFPVYRQR2BywbacMhq8bf1IKHxb9JMgBGKERxpzcPVzDRfozFq2CHgeR62jUwhPApqUiNlRxTrK-p9xFYxLUJEnCBUK~KZefSygBebL~AU-~BJ7njpLqN4UAmwIN~sCH5ugWqUUfP2HRdENjAEFzCqdG9XfWyGCwinAoSs4Nlky8wPdWo2YFTgw~H0jKvF4axGlNJvj2awW4-7t2F6OMUaoo3bNdmnlJvOmNVChiXOPrx1x7W~46GwXlUGsrsHYdW4JWrpLRuwKOC1gFW72hPaj~yITFMn5k3GGsDRBEpo5Uc9KKRwm2IilvuJ-Eo-uok4WmwouNwxPuw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "#FFF3FF",
          ItemName: "Orange",
          Amount: "63 items",
        },
      ],
    }
  }
}

</script>

<style scoped>
.Categories{
  display: flex; 
  flex-direction: row;
  padding:20px;
  z-index: 1;
}

</style>

