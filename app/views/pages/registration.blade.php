@extends('layouts.master')
@section('content')
@include('includes.header-reg')
<!--  Include Master template and header-reg
================================================ -->



<!--  Contributor Registration
================================================ -->
<div class="content">
    <div class="pure-g-r">
        <div class="pure-u-1-5">
        </div>
        <div class="pure-u-3-5">
            <div class="contributor">

                <div class="hr">
                    <h2>Contributor Registration</h2>
                    <p>If you wish to become a contributor and start sharing and uploading your images and spreading some love, fill out the details below. </p>
                </div>

                <form class="pure-form" ACTION="/contributor/registration" METHOD="POST">
                    <fieldset>

                        <div class="">
                            <div class="form-element form-group">
                                <div class="form-element">
                                    <label for="first-name">First Name</label><br />
                                    {{ Form::text("first_name",Input::old("username"),array('id'=>'nfirst-nameame','placeholder'=>'First Name')) }}
                                </div>
                                <div class="form-element">
                                    <label for="last-name">Last Name</label><br />
                                    {{ Form::text("last_name",Input::old("last_name"),array('id'=>'last-name','placeholder'=>'Last Name')) }}
                                </div>
                            </div><br />

                            <div class="form-element form-group">
                                <div class="form-element">
                                    <label for="address">Address</label><br />
                                    {{ Form::text("address",Input::old("address"),array('id'=>'address','placeholder'=>'123 Street')) }}
                                </div>
                                <div class="form-element">
                                    <label for="state">State</label><br />
                                    {{ Form::text("state",Input::old("state"),array('id'=>'state','placeholder'=>'California')) }}
                                </div>
                            </div><br />

                            <div class="form-element form-group">
                                <div class="form-element">
                                    <label for="city">City</label><br />
                                    {{ Form::text("city",Input::old("city"),array('id'=>'city','placeholder'=>'Los Angeles')) }}
                                </div>
                                <div class="form-element">
                                    <label for="zip">Zip</label><br />
                                    {{ Form::text("zip",Input::old("zip"),array('id'=>'zip','placeholder'=>'90001')) }}
                                </div>
                            </div><br />

                            <div class="form-element form-group">
                                <div class="form-element">
                                    <label for="phone">Phone</label><br />
                                    {{ Form::text("phone",Input::old("phone"),array('id'=>'phone','placeholder'=>'0123456')) }}
                                </div>
                                <div class="form-element">
                                    <label for="website-address">Website Address</label><br />
                                    {{ Form::text("website",Input::old("website"),array('id'=>'website-address','placeholder'=>'http://website.com')) }}
                                </div>
                            </div><br />

                            <div class="form-element form-group">
                                <label for="gravitar">Gravitar</label><br />

                                {{ Form::text("gravitar",Input::old("gravitar"),array('id'=>'gravitar','placeholder'=>'http://website.com')) }}
                            </div>
                            <span >
                                {{Gravatar::image(Sentry::getUser()->email, 'Some picture', array('width' => 45, 'height' => 45))}}
                            </span>
                            <br />
                        </div>
                        <div class="form-element form-group">
                            <div class="">
                                <label for="gravitar">Bio</label><br />
                                {{ Form::textarea("info",Input::old("info"),array('id'=>'info','placeholder'=>'Write a little about yourself (Bio). This can also be a professional Blurb.')) }}
                            </div>
                        </div><br />

                        <div class="social-inputs">
                            <div class="">
                                <label for="facebook">Facebook</label>

                                {{ Form::text("facebook",Input::old("facebook"),array('id'=>'facebook','placeholder'=>'facebook')) }}
                            </div>


                            <div class="">
                                <label for="twitter">Twitter</label>

                                {{ Form::text("twitter",Input::old("twitter"),array('id'=>'twitter','placeholder'=>'twitter')) }}
                            </div>

                            <div class="">
                                <label for="google+">Google+</label>

                                {{ Form::text("google",Input::old("google"),array('id'=>'google-plus','placeholder'=>'Google+')) }}
                            </div>


                            <div class="">
                                <label for="linkedin">IinkedIn</label>

                                {{ Form::text("linkedin",Input::old("linkedin"),array('id'=>'linkedin','placeholder'=>'linkedin')) }}
                            </div>
                        </div>

                        <div class="">
                            <label for="cb" class="pure-checkbox">
                                <input name="terms_and_conditions" id="cb" type="checkbox"> I've read the terms and conditions
                            </label>
                        </div>

                        <div class="">
                            <input class="pure-button pure-button-primary" type="submit" id="contribute" value="Submit" />
                        </div>
            </div><!-- End pure-g -->
            </fieldset>
            </form>
        </div><!-- End contributor -->
    </div><!-- End pure-2-3 -->
    <div class="pure-u-1-5">
    </div>
</div><!-- End pure-2-3 -->
</div><!-- End Content -->



<!--  Include Footer
================================================ -->
@include('includes.footer')
@stop
