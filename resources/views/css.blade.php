<style>

  body {
    min-height: 100vh;
    background: linear-gradient(to left bottom, rgb(0, 0, 0), rgb(125, 0, 0));
    color: white;
  }

  nav {
    min-height: 13vh;
  }

  main {
    min-height: 87vh;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  a, a:hover {
    color: white;
    text-decoration: none;
  }

  .container {
    max-width: 60vw;
    position: relative;
  }

  .circle {
    height: 7rem;
    width: 7rem;
    position: absolute;
    border-radius: 50%;
    z-index: -1;
  }

  .circle-right {
    top: -2.5rem; 
    right: -2.5rem; 
    background: linear-gradient(to right bottom, rgba(125, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
  }

  .circle-left {
    bottom: -2.5rem; 
    left: -2.5rem; 
    background: linear-gradient(to right bottom, rgba(0, 0, 0, 0.8), rgba(125, 0, 0, 0.3));
  }

  .card {
    background: linear-gradient(to left bottom, rgb(0, 0, 0), rgb(125, 0, 0));
    border-radius: 0.5rem;
    box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.8);
  }

  .card-about {
    padding: 1rem 7rem 1rem 7rem;
    text-align: center;
  }

  .card-info {
    display: flex;
    justify-content: space-between;
    padding-left: 15vw;
    padding-right: 15vw;
  }

  .card-footer-small {
    display: none;
  }

  .form-control,
  .btn {
    border-color: white;
    color: white;
    background: linear-gradient(to right bottom, rgba(125, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
    border-radius: 0.5rem;
  }

  .form-control:focus,
  .btn:hover {
    background: linear-gradient(to right bottom, rgba(0, 0, 0, 0.7), rgba(125, 0, 0, 0.3));
    border-color: white;
    color: white;
  }

  .form-control::placeholder {
    color: white;
  }

  textarea {
    resize: none;
  }

  @media only screen and (max-width: 600px) {
    .container {
      min-width: 80vw;
    }

    .card-info {
      padding: 0;
    }

    .card-about {
      padding: 1rem 0 1rem 0;
    }

    .circle {
      height: 4rem;
      width: 4rem;
    }

    .circle-right {
      top: -1.5rem; 
      right: -1.25rem; 
    }

    .circle-left {
      bottom: -1.5rem; 
      left: -1.25rem; 
    }

    .card-footer-small {
      display: inline;
    }

    .card-footer-wide {
      display: none;
    }

  }

</style>