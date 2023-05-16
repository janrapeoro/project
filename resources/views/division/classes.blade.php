<section class="section" id="strat">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h1>Strategies For<em> SUCCESS</em></h1>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>This strategies focus on educating students and providing them with the necessary resources to make informed financial decisions. 
                     
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
          <div class="col-lg-4">
            <ul>
              <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Financial education</a></li>
              <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Creating a budget</a></a></li>
              <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Fostering accountability</a></a></li>
              <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Investing in the future</a></a></li>
              <div class="main-rounded-button"><a href="{{ route('create.index') }}">View All Expenses</a></div>
            </ul>
          </div>
          <div class="col-lg-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/educ.jpg" alt="Financial Education">
                <h4>Financial education</h4>
                <p> Educate students about personal finance, including budgeting, saving, investing, and credit management. 
                    This education can be provided through courses, workshops, or online resources.</p>
                <div class="main-button">
                    <a href="{{ route('bills.create') }}">Add Expenses</a>
                </div>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/create.jpg" alt="Creating a budget">
                <h4>Creating a budget</h4>
                <p> Encourage students to create a budget that outlines their income and expenses. This can help students manage their money effectively and avoid overspending.</p>
                <div class="main-button">
                  <a href="{{ route('bills.create') }}">Add Expenses</a>
                </div>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/fostering.jpg" alt="Fostering accountability">
                <h4>Fostering accountability</h4>
                <p>Encourage students to be accountable for their financial decisions by regularly checking in with them about their progress. 
                  Encourage students to reflect on their spending habits and make adjustments as needed. 
                  This can help students develop good financial habits that will serve them well in the future.</p>
                <div class="main-button">
                  <a href="{{ route('bills.create') }}">Add Expenses</a>
                </div>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/coin.jpg" alt="Investing in the future">
                <h4>Investing in the future</h4>
                <p>Encourage students to invest in their future by saving for retirement, starting an emergency fund, or investing in the stock market. 
                  This can help students achieve their long-term financial goals and build wealth over time.</p>
                <div class="main-button">
                  <a href="{{ route('bills.create') }}">Add Expenses</a>
                </div>
              </article>
            </section>
          </div>
        </div>
    </div>
</section>