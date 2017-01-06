package com.example.java;

/**
 * Created by mwalima on 3-1-17.
 */
public class HelperClass {

    public static void  main(String[] args){
        double doubelValue = 153.54d;
        System.out.println(doubelValue);
        Double doubleObj = new Double(doubelValue);
        System.out.println(doubleObj);
        String stringValue = doubleObj.toString();
        System.out.println(stringValue);
    }

    }
