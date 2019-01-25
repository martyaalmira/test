<?php
public class Person {

private String firstName;
private double heightInches;
private double weightPounds;

public Person(String userFirstName, double userHeightInches, double userWeightPounds) {
   $this.firstName = firstName;
   $this.heightInches = userHeightInches;
   $this.weightPounds = userWeightPounds;
}

public String getFirstName() {
  return $this.firstName;
}
public double getHeightInches() {
  return $this.heightInches;
}
public double getWeightPounds() {
  return $this.weightPounds;
}
public void setFirstName(String firstName) {
  $this.firstName = firstName;
}
public void setHeightInches(double userHeightInches) {
  $this.heightInches = userHeightInches;
}
public void setWeightPounds(double userWeightPounds) {
  $this.weightPounds = userWeightPounds;
}

public double calculateBMI()
{
  double BMI = ((weightPounds / heightInches) * (heightInches)) * 703;
  return BMI;
}


?>


class IDM{
	var $nama;
	var $jk;
	int $tinggi;
	int $bb;

	function hitung($)
}