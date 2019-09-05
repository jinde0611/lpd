<style>
body {
  font-family: 'Montserrat', Helvetica, sans-serif;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  height: 100vh;
}


.button1 {
  background: #76B3FA;
  border-radius: 100px;
  padding: 20px 60px;
  color: #fff;
  text-decoration: none;
  font-size: 1.45em;
  margin: 0 15px;
}

/* Hover state animation applied here */
.button1:hover { 
  -webkit-animation: hover 1200ms linear 2 alternate;
  animation: hover 1200ms linear 2 alternate;
}

/* Active state animation applied here */
.button1:active {
  -webkit-animation: active 1200ms ease 1 alternate;
  animation: active 1200ms ease 1 alternate; 
  background: #5F9BE0;
}
</style>
<a href="#" class="button1">Recommend</a>