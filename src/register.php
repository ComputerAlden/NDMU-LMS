<!DOCTYPE html>
<html lang="en" data-theme="lemonade">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDMU LMS</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/logo.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</head>

<body>
    <div class="min-h-screen flex">
        <?php include 'loading.php'; ?>
        <div class="flex-grow">
            <div class="navbar bg-primary text-primary-content">
                <img src="/assets/logo.png" class="w-12 h-12">
                <a class="label font-bold font-poppins text-xl flex-1">Notre Dame Of Marbel University</a>
                <div class="flex-none">
                    <a class="btn btn-ghost">Explore NDMU</a>
                </div>
            </div>
            <div class="container mx-auto p-4">
                <main>
                    <div class="flex flex-col items-center">
                        <div class="w-full lg:w-4/5 xl:w-3/5">
                            <form id="registration-form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="#">
                                <h2 class="text-3xl font-bold mb-8">Enrollment Form</h2>
                                <hr class="max-w-4xl mx-auto py-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/4 px-2">
                                    <label for="year_level"
                                            class="block text-sm font-medium text-gray-700 mb-1">Year Level</label>
                                        <select id="year_level" id="year_level" name="year_level"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="first">Frist Year</option>
                                            <option value="second">Second Year</option>
                                            <option value="third">Third Year</option>
                                            <option value="fourth">Fourth Year</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="course"
                                            class="block text-sm font-medium text-gray-700 mb-1">Course</label>
                                        <input type="text" id="course" name="course"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                    <label for="student_classification"
                                            class="block text-sm font-medium text-gray-700 mb-1">Student Classification</label>
                                        <select id="student_classification" id="student_classification" name="student_classification"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="new">New</option>
                                            <option value="transferee">Transferee</option>
                                            <option value="continuing">Continuing</option>
                                            <option value="returnee">Returnee</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                    <label for="student_status"
                                            class="block text-sm font-medium text-gray-700 mb-1">Student Status</label>
                                        <select id="student_status" id="student_status" name="student_status"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="working">Working</option>
                                            <option value="regular">Regular</option>
                                            <option value="irregular">Irregular</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-8">
                                <h2 class="text-3xl font-bold mb-8">Personal Information</h2>
                                <p class="text-red-800">Type N/A if not applicable</p>
                                <hr class="my-8">
                                <!-- Last name, first name, middle name, extension -->
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last
                                            Name</label>
                                        <input type="text" id="last_name" name="last_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="first-name"
                                            class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                        <input type="text" id="first_name" name="first_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="middle-name"
                                            class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="extension"
                                            class="block text-sm font-medium text-gray-700 mb-1">Extension</label>
                                        <input type="text" id="extension" name="extension"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>
                                </div>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="gender"
                                            class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                                        <select id="gender" id="gender" name="gender"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="age"
                                            class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                                        <input type="number" id="age" name="age"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="contact_number"
                                            class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                                        <input type="number" id="contact_number" name="contact_number"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="religion"
                                            class="block text-sm font-medium text-gray-700 mb-1">Religion</label>
                                        <input type="text" id="religion" name="religion"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>

                                    <div class="w-full md:w-1/4 px-2 mt-2">
                                        <label for="birth-date"
                                            class="block text-sm font-medium text-gray-700">Birthdate</label>
                                        <input type="date" id="birthdate" name="birthdate"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>

                                    <div class="w-full md:w-1/2 px-2 mt-3">
                                        <label for="birth-place" class="block text-sm font-medium text-gray-700">Place
                                            of Birth</label>
                                        <input type="text" id="place_of_birth" name="place_of_birth"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <hr class="my-8">
                                <!-- Home address, street, block, provincial/city -->

                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="home-address"
                                            class="block text-sm font-medium text-gray-700 mb-1">Home Address</label>
                                        <input type="text" id="home_address" name="home_address"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="street"
                                            class="block text-sm font-medium text-gray-700 mb-1">Street</label>
                                        <input type="text" id="street" name="street"
                                            class="form-input w-full py-1 px-3 mb-3 bg-gray-200 border border-gray-300 rounded-md f focus:outline-none focus:bg-transparent "
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="block"
                                            class="block text-sm font-medium text-gray-700 mb-1">Block</label>
                                        <input type="text" id="block" name="block"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="province-city"
                                            class="block text-sm font-medium text-gray-700 mb-1">Provincial/City</label>
                                        <input type="text" id="provincial_city" name="provincial_city"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="zipcode" class="block text-sm font-medium text-gray-700 mb-1">Zip
                                            Code</label>
                                        <input type="text" id="zip_code" name="zip_code"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>

                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="confirm_email"
                                            class="block text-sm font-medium text-gray-700 mb-1">Confirm Email</label>
                                        <input type="email" id="confirm_email" name="confirm_email"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>

                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                    </div>

                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="confirm_password"
                                            class="block text-sm font-medium text-gray-700 mb-1">Confirm
                                            Password</label>
                                        <input type="password" id="confirm_password" name="confirm_password"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>

                                </div>
                                <hr class="max-w-4xl mx-auto py-8 mt-4">
                                <h3 class="text-3xl font-bold mb-8">Person to Contact In Case of Emergency</h3>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="em_name"
                                            class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                        <input type="text" id="em_name" name="em_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/4 px-2">
                                        <label for="em_contact"
                                            class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                                        <input type="text" id="em_contact" name="em_contact"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/2 px-2">
                                        <label for="em_address"
                                            class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                        <input type="text" id="em_address" name="em_address"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <hr class="max-w-4xl mx-auto py-8 mt-4">
                                <h3 class="text-3xl font-bold mb-8">Family Information</h3>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="father_name"
                                            class="block text-sm font-medium text-gray-700 mb-1">Father's Name</label>
                                        <input type="text" id="father_name" name="father_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">Mother's
                                            Name</label>
                                        <input type="text" id="mother_name" name="mother_name"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="gname"
                                            class="block text-sm font-medium text-gray-700 mb-1">Guardian's Name</label>
                                        <input type="text" id="guardian_name" name="gname"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="father_occupation"
                                            class="block text-sm font-medium text-gray-700 mb-1">Father's
                                            Occupation</label>
                                        <input type="text" id="father_occupation" name="father_occupation"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="mother_occupation"
                                            class="block text-sm font-medium text-gray-700 mb-1">Mother's
                                            Occupation</label>
                                        <input type="text" id="mother_occupation" name="mother_occupation"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="guardian_occupation"
                                            class="block text-sm font-medium text-gray-700 mb-1">Guradian's
                                            Occupation</label>
                                        <input type="text" id="guardian_occupation" name="guardian_occupation"
                                            class="form-input w-full py-1 px-3 mb-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent"
                                            style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/3 px-2">
                                    <label for="father_status"
                                            class="block text-sm font-medium text-gray-700 mb-1">Father's Status</label>
                                        <select id="fstaus" id="father_status" name="father_status"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="alive">Alive</option>
                                            <option value="deceased">Deceased</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-1/3 px-2">
                                    <label for="mother_status"
                                            class="block text-sm font-medium text-gray-700 mb-1">Mother's Status</label>
                                        <select id="mstaus" id="mother_status" name="mother_status"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="alive">Alive</option>
                                            <option value="deceased">Deceased</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-8">
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full md:w-1/3 px-2">
                                        <label for="marriage"
                                            class="block text-sm font-medium text-gray-700 mb-1">Marriage Status</label>
                                        <select id="marriage" id="marriage_status" name="marraige"
                                            class="form-input w-full py-1 px-3  bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-transparent">
                                            <option value=""></option>
                                            <option value="living_together">Living Together</option>
                                            <option value="seperated">Seperated</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="max-w-4xl mx-auto py-8">
                                    <div class="flex flex-wrap justify-between mt-8">
                                        <button type="submit" id="submit-button" class="shadow bg-primary hover:bg-green-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-4 md:mb-0 md:w-auto">
                                            Save
                                        </button>

                                        <a href="/index.php"
                                            class="shadow bg-gray-600 hover:bg-gray-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded md:w-auto">
                                            Go Back
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="/script/load.js"></script>
    <script src="/script/register.js"></script>
</body>

</html>