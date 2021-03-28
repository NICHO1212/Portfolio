<style>
  :root {
    --color1: white;
  }
</style>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: var(--color1);
  }

  a:hover{
    text-decoration: none;
  }

  .form-control::placeholder {
    color: var(--color1);
  }

  textarea {
    resize: none;
  }

  main {
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
    background: linear-gradient(to left bottom, rgb(0, 0, 0), rgb(175, 0, 0));
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .glass {
    min-height: 80vh;
    width: 60%;
    background: linear-gradient(to right bottom, rgba(175, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
    border-radius: 0.5rem;
    z-index: 2;
    backdrop-filter: blur(0.5rem);
    display: flex;
  }

  .circle1,
  .circle2 {
    height: 10rem;
    width: 10rem;
    position: absolute;
    border-radius: 50%;
  }

  .circle1 {
    top: 5%;
    right: 15%;
    background: linear-gradient(to right bottom, rgba(175, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
  }

  .circle2 {
    bottom: 5%;
    left: 15%;
    background: linear-gradient(to right bottom, rgba(0, 0, 0, 0.8), rgba(175, 0, 0, 0.3));
  }

  .dashboard {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    text-align: center;
    background: linear-gradient(to right bottom, rgba(0, 0, 0, 0.7), rgba(175, 0, 0, 0.3));
    border-radius: 0.5rem;
  }

  .form-control,
  .form-control:focus,
  .btn, 
  .btn:hover {
    border-color: var(--color1);
    color: var(--color1);
    background: linear-gradient(to right bottom, rgba(175, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
    border-radius: 0.5rem;
  }

  .link {
    display: flex;
    margin: 0.5rem 0rem;
    padding: 0.25rem 0.5rem;
    align-items: center;
    text-align: center;
  }

  .link h2 {
    padding: 0rem 0.5rem;
  }

  .content-head {
    margin: 0.5rem;
  }

  .content {
    flex: 2;
    margin: 0.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
  }

  .card {
    display: flex;
    background: linear-gradient(to left top, rgba(175, 0, 0, 0.8), rgba(0, 0, 0, 0.5));
    border-radius: 1rem;
    margin: 0.5rem 0rem;
    padding: 0.5rem;
    box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.8);
    justify-content: space-between;
  }

  .card-info {
    display: flex;
    justify-content: space-between;
    padding-left: 5vw;
    padding-right: 5vw;
  }

  .card-info a,
  .card-info a:hover {
    color: var(--color1);
  }

  .card-about {
    padding: 2rem;
    text-align: center;
  }

</style>

<style>
  @media screen and (max-width: 600px){
    .glass {
      min-width: 90vh;
    }
    .circle1, .circle2 {
      display: hide;
    }
  }
</style>