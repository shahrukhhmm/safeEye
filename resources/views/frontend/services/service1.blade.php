@include('frontend.component.header')
@include('frontend.component.serviceCss')



<div class="landing">
    <h1 class="card1">Services Details</h1>
    <img  src="{{ asset('frontend/images/web-design-01.jpg') }}" alt="">
</div>
<div class="services">
    <h1 class="card1">Zakat</h1>
    <p class="card2">The Zakat functionality in a company's software provides an essential tool for calculating and managing zakat payments with ease and accuracy. Zakat, an obligatory charity in Islam, requires Muslims to donate a portion of their wealth to the needy. This feature is designed to simplify the calculation process, streamline record-keeping, and allow efficient monitoring of zakat obligations for businesses with multiple branches or departments.

        At its core, the zakat function has several key components: tracking the zakat year, monitoring total income, calculating total zakat owed, and keeping a record of payment statuses. Users can toggle the status of the zakat payments between “paid” and “unpaid,” ensuring that they can easily track which payments have been made and which are still pending. This transparency helps businesses stay compliant with their religious obligations while also making the process more straightforward for financial managers.

        Core Features
        1. Zakat Year Tracking
        One of the foundational features of this software is the ability to track the zakat year. Since zakat must be calculated annually based on a lunar calendar (Hijri year), keeping track of the exact zakat year is crucial. The system automatically calculates the next zakat due date by taking the zakat year into account, ensuring businesses are always up to date with their obligations. This eliminates the need for manual tracking, reducing errors and increasing efficiency.

        2. Total Income Monitoring
        The software tracks the total income of the business throughout the zakat year, providing a detailed summary of all financial inflows that will be relevant for zakat calculation. Whether the income is derived from sales, investments, or other streams, the system consolidates this data, giving users a comprehensive view of the wealth accumulated during the zakat year. By having a clear breakdown of total income, users can ensure that their zakat calculations are based on accurate, up-to-date information.

        3. Total Zakat Calculation
        Zakat is generally calculated as 2.5% of a person's or business’s qualifying wealth. The software calculates the total zakat based on the total income figures, automatically applying the appropriate zakat percentage to derive the total amount owed. Users no longer have to rely on manual calculations, reducing the risk of mistakes. This automated calculation ensures that businesses always know exactly how much zakat they need to pay, simplifying the overall process.

        4. Payment Status Management
        An essential feature of this zakat function is the ability to manage payment statuses. Users can easily update the status of their zakat payments, toggling between “paid” and “unpaid” with just a few clicks. This feature provides real-time tracking of payments, allowing financial managers to ensure that all payments have been fulfilled before the zakat year ends. Additionally, if a payment needs to be adjusted or reversed, users can quickly change the status back to “unpaid,” offering flexibility for any needed modifications.

        Branch Details for Zakat Year
        For businesses with multiple branches, the zakat function includes a detailed view of branch-specific zakat information for each year. Each branch’s name, total inventory, total price, and zakat details are displayed in an organized manner. This ensures that users can manage zakat payments for individual branches without confusion.

        Branch Name: The software lists each branch by name, making it easy for users to identify and review the specific branch details.

        Total Inventory and Price: The system tracks the total inventory and associated value for each branch. This information is crucial, as the value of stock or goods held by the business may be included in the zakat calculation, depending on the business's specific circumstances. By having these figures clearly listed, businesses can ensure they are calculating zakat on all qualifying assets.

        Branch Zakat: Finally, the total zakat amount for each branch is calculated and displayed. This helps financial managers track each branch’s obligations separately, providing a detailed overview of how much zakat needs to be paid for the business as a whole.

        Conclusion
        The zakat functionality in the company’s software provides an all-encompassing solution for businesses that need to track and manage zakat payments across multiple branches. Its comprehensive tracking of income, automatic zakat calculations, and the ability to manage payment statuses ensure that businesses can meet their zakat obligations efficiently and with minimal effort. By offering branch-level details, it provides businesses with the flexibility to manage zakat at a granular level, ensuring compliance and accuracy in zakat payment.</p>


    <a href="{{ url('/dashboard') }}">Buy Now!</a>
</div>
@include('frontend.component.footer')




@include('frontend.component.serviceJs')
</body>
</html>
