@extends('app')

@section('content')

    <div class="container">

        <form id="createForm">

            <div class="row justify-content-center">
            

                <div class="mt-3 mb-3 col-xs-12 col-sm-12 col-md-8 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">

                            <h4>Personal Information</h4>

                            <hr>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstName" placeholder=" ">
                                <label for="firstName">First Name</label>
                            </div>
                
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" placeholder=" ">
                                <label for="lastName">Last Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="middleName" placeholder=" ">
                                <label for="middleName">Middle Name</label>
                            </div>

                            <div class="form-group mb-3">

                                <label for="">Gender</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" checked>
                                    <label class="form-check-label" for="male">
                                      Male
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female">
                                    <label class="form-check-label" for="female">
                                      Female
                                    </label>
                                </div>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dateOfBirth" placeholder=" ">
                                <label for="dateOfBirth">Date Of Birth</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="birthPlace" placeholder=" ">
                                <label for="birthPlace">Birth Place</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="address" placeholder=" ">
                                <label for="address">Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="zone">
                                  <option selected>Select Zone</option>
                                  <option value="1">Zone 1</option>
                                  <option value="2">Zone 2</option>
                                  <option value="3">Zone 3</option>
                                  <option value="4">Zone 4</option>
                                  <option value="5">Zone 5</option>
                                  <option value="6">Zone 6</option>
                                  <option value="7">Zone 7</option>
                                </select>
                                <label for="zone">Zone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="contactNumber" placeholder=" ">
                                <label for="contactNumber">Contact Number</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" placeholder=" ">
                                <label for="email">Email</label>
                            </div>
                
                        </div>
                    </div>
                </div>

                <div class="mt-3 col-xs-12 col-sm-12 col-md-8 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Additional Information</h4>
                            <hr>

                            <div class="form-group mb-3">

                                <label for="">KK Member</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kkMember" id="yes" checked>
                                    <label class="form-check-label" for="yes">
                                        Yes
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kkMember" id="no">
                                    <label class="form-check-label" for="no">
                                        NO
                                    </label>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="civilStatus">
                                  <option selected>Select Civil Status</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Divorced">Divorced</option>
                                  <option value="Widowed">Widowed</option>
                                  <option value="Others">Others</option>
                                </select>
                                <label for="civilStatus">Civil Status</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tribe" placeholder=" ">
                                <label for="tribe">Tribe</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="religion" placeholder=" ">
                                <label for="religion">Religion</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="educAttainment" placeholder=" ">
                                <label for="educAttainment">Educational Attainment</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="occupation" placeholder=" ">
                                <label for="occupation">Occupation</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="youthSector">
                                  <option selected>Select Youth Sector</option>
                                  <option value="LGBT">LGBT</option>
                                  <option value="OSY">Out of School Youth</option>
                                  <option value="IN-SCHOOL">IN-SCHOOL</option>
                                  <option value="FAITH BASED">FAITH BASED</option>
                                  <option value="Others">Others</option>
                                </select>
                                <label for="youthSector">Youth Sector</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="youthSector">
                                  <option selected>Select Organization</option>
                                  <option value="LGBT">LGBT</option>
                                  <option value="OSY">Out of School Youth</option>
                                  <option value="IN-SCHOOL">IN-SCHOOL</option>
                                  <option value="FAITH BASED">FAITH BASED</option>
                                  <option value="Others">Others</option>
                                </select>
                                <label for="youthSector">Organization</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 col-xs-12 col-sm-12 col-md-8 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Family Background</h4>
                            <hr>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fathersName" placeholder=" ">
                                <label for="fathersName">Fathers Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fathersOccupation" placeholder=" ">
                                <label for="fathersOccupation">Fathers Occupation</label>
                            </div>

                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="mothersName" placeholder=" ">
                                <label for="mothersName">Mothers Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="mothersOccupation" placeholder=" ">
                                <label for="mothersOccupation">Mothers Occupation</label>
                            </div>

                            <div class="form-group mb-3">

                                <label for="">Living with Parents</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="yes" checked>
                                    <label class="form-check-label" for="yes">
                                        Yes
                                    </label>
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="no">
                                    <label class="form-check-label" for="no">
                                        NO
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder=" " id="concerns" style="height: 200px"></textarea>
                                    <label for="concerns">Concerns / Issues</label>
                                  </div>
                            </div>

                            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>

            </div>

           
        
        </form>
    </div>
    <script>

        const createForm = document.querySelector('#createForm');
        const firstName = document.querySelector('#firstName');
        const lastName = document.querySelector('#lastName');

        createForm.addEventListener('submit', createYouth);

        async function createYouth(e){
            e.preventDefault();
            console.log('clicked');
        }

    </script>
@endsection

