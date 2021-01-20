<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  h1 {
    color: #426696;
    opacity: 0.8;
  }
  h2,
  p {
    color: #658ec6;
    opacity: 0.8;
  }

  h3 {
    color: #426696;
    opacity: 0.8;
  }

  main {
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
    background: linear-gradient(to right top, #65dfc9, #6cdbeb);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .glass {
    background: white;
    min-height: 80vh;
    width: 60%;
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.7),
      rgba(255, 255, 255, 0.3)
    );
    border-radius: 0.5rem;
    z-index: 2;
    backdrop-filter: blur(0.5rem);
    display: flex;
  }
  .circle1,
  .circle2 {
    background: white;
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.8),
      rgba(255, 255, 255, 0.3)
    );
    height: 10rem;
    width: 10rem;
    position: absolute;
    border-radius: 50%;
  }

  .circle1 {
    top: 5%;
    right: 15%;
  }
  .circle2 {
    bottom: 5%;
    left: 10%;
  }
  .dashboard {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    text-align: center;
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.7),
      rgba(255, 255, 255, 0.3)
    );
    border-radius: 2rem;
  }
  .link {
    display: flex;
    margin: 0.5rem 0rem;
    padding: 0.25rem 0.5rem;
    align-items: center;
  }
  .link h2 {
    padding: 0rem 0.5rem;
  }

  .games {
    flex: 2;
  }

  .pro {
    background: linear-gradient(to right top, #65dfc9, #6cdbeb);
    border-radius: 2rem;
    color: white;
    padding: 0.5rem;
    position: relative;
  }

  .pro img {
    position: absolute;
    top: -10%;
    right: 10%;
  }
  .pro h2 {
    width: 40%;
    color: white;
  }

  /* GAMES */
  .status {
    margin-bottom: 0.5rem;
  }

  .status input {
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.7),
      rgba(255, 255, 255, 0.3)
    );
    border: none;
    width: 50%;
    padding: 0.5rem;
    border-radius: 2rem;
  }

  .games {
    margin: 0.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
  }

  .card {
    display: flex;
    background: linear-gradient(
      to left top,
      rgba(255, 255, 255, 0.8),
      rgba(255, 255, 255, 0.5)
    );
    border-radius: 1rem;
    margin: 0.5rem 0rem;
    padding: 0.5rem;
    box-shadow: 6px 6px 20px rgba(122, 122, 122, 0.212);
    justify-content: space-between;
  }

  .card-info {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .percentage {
    font-weight: bold;
    background: linear-gradient(to right top, #65dfc9, #6cdbeb);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>