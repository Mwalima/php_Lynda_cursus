package com.example.java;

import java.util.ArrayList;
import java.util.List;

public class Main {

    public static void main(String[] args) {
        String name = "David";
        String lastname ="van den Houten";
    System.out.println(name+' '+lastname);

        for (int i = 0; i < 5; i++){
            System.out.print(i);
        }
        String[] words={"jhjhg","jhkjhj","jhkhk"};
        for ( String word:words) {
            System.out.println(word);
        }

        System.out.println(args[0]);

        List<String>somelist = new ArrayList<String>();
        somelist.add("monkey");
        somelist.add("donkey");
        somelist.add("skeleton");

        for (String item : somelist){
            System.out.println(item);
        }
        }

}
