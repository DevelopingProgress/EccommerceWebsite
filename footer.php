</main>
<!-- finish main -->


<!-- start footer -->
<footer id="footer" class="bg-dark text-white py-5  mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Biurka Plex</h4>
                <p class="font-size-14 font-raleway text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nihil!</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newsletter</h4>
                <form class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger mb-2">Zasubskrybuj</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Informacje</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">O nas</a>
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Informacje o dostawie</a>
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Polityka Prywatności</a>
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Regulamin sklepu</a>

                </div>
            </div>
            <?php
                if(isset($_SESSION['admin'])){
            ?>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Konto</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="panel.php" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Moje konto</a>
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Historia zamówień</a>
                    <a href="" class="font-raleway font-size-14 text-white-50 pb-1 text-decoration-none">Lista życzeń</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-raleway font-size-14">&copy;Copyrights 2020.Design By <a href="https://www.linkedin.com/in/developingprogress/" class="color-second text-decoration-none">Kacper Gaweł</a></p>
</div>
<!-- finish footer -->


</body>
</html>