from flask import Flask, request, jsonify
import openai
import gradio as gr
import os

# Set your OpenAI API key from environment variable
openai.api_key = os.getenv("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")


app = Flask(__name__)

# Store conversation history and job role
conversation_history = []
job_role = None

def generate_interview_response(prompt):
    global conversation_history, job_role

    # Add the user's prompt to the conversation history
    conversation_history.append({"role": "user", "content": prompt})

    # Generate a response using OpenAI's GPT-3 or GPT-4
    response = openai.ChatCompletion.create(
        model="gpt-4",  # or "gpt-3.5-turbo"
        messages=[
            {"role": "system", "content": f"You are a professional mock interviewer conducting a technical interview for the role of {job_role}. Ask the candidate one question at a time, and wait for their response before proceeding. Start by introducing yourself and asking the first question."},
            *conversation_history
        ]
    )

    # Extract the assistant's reply
    assistant_reply = response['choices'][0]['message']['content']

    # Add the assistant's reply to the conversation history
    conversation_history.append({"role": "assistant", "content": assistant_reply})

    return assistant_reply

def start_interview(job_role_input):
    global job_role
    job_role = job_role_input
    if not job_role:
        return "Please enter a job role."

    # Generate the interviewer's first question
    interviewer_response = generate_interview_response("Start the interview.")
    return interviewer_response

def chat(user_input):
    if not user_input:
        return "Please enter a response."

    # Generate the interviewer's response
    interviewer_response = generate_interview_response(user_input)
    return interviewer_response

# Gradio Interface
def gradio_interface(job_role_input, user_input):
    if not job_role:
        return start_interview(job_role_input)
    else:
        return chat(user_input)

iface = gr.Interface(
    fn=gradio_interface,
    inputs=[
        gr.Textbox(label="Enter your desired job role (e.g., Software Engineer)"),
        gr.Textbox(label="Your response")
    ],
    outputs=gr.Textbox(label="Interviewer's Response"),
    live=True
)

if __name__ == '__main__':
    iface.launch(server_port=7860, server_name="0.0.0.0")