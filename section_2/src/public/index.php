<?php

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

// define('APP', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// require APP . 'app/Transaction.php';
// require APP . 'app/Customer.php';
// require APP . 'app/PaymentProfile.php';

/* Lesson 2 - Classes, objects, typed properties, constructors and destructors */
// $transaction = new Transaction(100.00, 'Transaction 1');

// Methods Chaining
// $transaction->addTax(8)->applyDiscount(10);

// var_dump($transaction->getAmount());

/*********************************************************************************8*/

####################################################################
# Lesson 3 - Constructor property promotion & null safe operator   #
####################################################################

/* Null-safe-operator on method chaining */
// $transaction = new App\Transaction(5, 'test');

// $customer = new Customer;
// $transaction->setCustomer($customer);
// $customer->setPaymentProfile(new PaymentProfile);

// echo $transaction->getCustomer()?->getPaymentProfile()?->getId();

/*********************************************************************************8*/

######################
#      Lesson 4      #
######################
// require_once '../app/PaymentGateway/Paddle/Transaction.php';
// require_once '../app/PaymentGateway/Stripe/Transaction.php';

// use PaymentGateway\Paddle\Transaction as PaddleTransaction;
// use PaymentGateway\Stripe\Transaction as StripeTransaction;

// var_dump(new PaddleTransaction);
/*********************************************************************************8*/


##################################################################
/*                  Lesson 5                                    */
/* Using composer for autoloading classes.                      */
/* by adding "autoload" keyword in composer.json                */
/* then defining which PSR version to use, in most cases        */
/* use PSR-4                                                    */
/* then add parent namespace as key and its directory as value. */
##################################################################


// use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
// use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
// use Ramsey\Uuid\UuidFactory;

// var_dump(PaddleTransaction::class);
// var_dump(StripeTransaction::class);

// $id = new UuidFactory();

// echo $id->uuid4();
/*********************************************************************************/


##################################################
/*         Lessons 6 - Class constants          */
##################################################

// use App\PaymentGateway\Paddle\Transaction;
// use App\Enums\Status;

// echo Transaction::STATUS_PAID;
// echo Transaction::getPassword();

// $transaction = new Transaction(null, null);

// $transaction->setStatus(Status::PAID);

// echo $transaction->getStatus();
/*********************************************************************************/

##################################################
/*   Lesson 7 - Static properties and methods   */
##################################################

// use App\PaymentGateway\Stripe\Transaction;

// new Transaction();
// var_dump(Transaction::$count);

// use App\DB;

// // singleton pattern, demonstrate static properties and static methods.
// DB::getInstance([]);
// DB::getInstance([]);
// DB::getInstance([]);
// DB::getInstance([]);

/*********************************************************************************/

#####################################################
/*    Lesson 8 - Encapsulation & Abstraction       */
/*    Encapsulation: hides internal state or info  */
/*    Abstraction: hides the actual implementation */
#####################################################

// use App\PaymentGateway\Visa\Transaction;

// $transaction = new Transaction(15.99);

// // Access private and protected properties using ReflectionProperty class.
// $reflectionProperty = new ReflectionProperty($transaction, 'amount');

// $reflectionProperty->setAccessible(true);

// var_dump($reflectionProperty->getValue($transaction));

// echo "<br/>";
// echo $transaction->process();
####################################################################


####################################################
#                Lesson 9 - Inheritance            #
####################################################

// use App\Machines\Toaster;
// use App\Machines\ToasterPro;
// use App\Machines\FancyOven;

// $toaster = new Toaster();

// $toaster->addSlice('Slice 1');
// $toaster->addSlice('Slice 2');
// $toaster->toast();

// echo '<br />';

// $toasterPro = new ToasterPro;

// $toasterPro->addSlice('slice 1');
// $toasterPro->addSlice('slice 2');
// $toasterPro->addSlice('slice 3');
// $toasterPro->addSlice('slice 4');
// $toasterPro->toast();
// echo '<br />';
// $toasterPro->toastWithBagel();

// $fancyOven = new FancyOven(new ToasterPro);

// $fancyOven->fry();

// $fancyOven->addSlice('slice 1');
// $fancyOven->addSlice('slice 2');
// $fancyOven->toast();

####################################################################


##############################################################################
#     Lesson 10 - Abstract Classes                                           #
#     1- Can not be instantiated.                                            #
#     2- Can contain abstract methods and regular methods and properties.    #
#     3- Only child classes implements parent's abstract methods.            #
#     4- Abstract classes may provide some basic functionality and force     #
#        child classes to implement abstract methods.                        #
##############################################################################

// $fields = [
//     new \App\Fields\Text('First Name'),
//     new \App\Fields\Text('Last Name'),
//     new \App\Fields\Text('Email Name'),
//     new \App\Fields\Checkbox('Approved'),
//     new \App\Fields\Radio('yes'),
//     new \App\Fields\Radio('no'),
// ];

// foreach ($fields as $field)
// {
//     echo $field->render();
// }

##############################################################################


##############################################################################
#    Lesson 11 - Interfaces & Polymorphism    
##############################################################################
use App\Agencies\DebtCollectorService;
use App\Agencies\CollectionAgency;
use App\Agencies\Rocky;

$service = new DebtCollectorService;

/* 
    Polymorphism: passing objects of classes that implements
    an interface no matter of what each class implementation.
*/
echo $service->collectDebt(new CollectionAgency);
echo $service->collectDebt(new Rocky);